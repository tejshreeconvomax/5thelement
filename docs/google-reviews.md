# Google Reviews setup

The shared review section in `components/reviews/testimonials.php` loads reviews through
`api/google-reviews.php`. The homepage and catering page request all configured
locations. `jacksonville.php` requests Baymeadows only. API credentials are
never sent to the browser.

Until Business Profile API access is ready, the endpoint displays four short
Baymeadows review excerpts captured from the restaurant's published Google
reviews widget on November 25, 2026. The snapshot lives in
`includes/featured-reviews.php`, is labeled as static on the page, and does
not refresh automatically. It is used for the homepage, catering page, and
Baymeadows page only. When a successful live API response is available, it
replaces the snapshot automatically. Other locations without verified static
reviews remain unavailable until their live integration is configured.

## Why Google Business Profile

The live WordPress homepage uses a Trustindex Google widget. This PHP project
uses the owner-managed Google Business Profile Reviews API instead. Google's
[pricing page](https://developers.google.com/my-business/content/pricing)
lists this API as no charge for registered users, with no published trial
expiry. Access is gated by project approval and quotas; see the
[prerequisites](https://developers.google.com/my-business/content/prereqs) and
[limits](https://developers.google.com/my-business/content/limits). No paid
subscription is activated by this code.

Google's public Places API can return only up to five reviews per place and
the review field is in its Enterprise + Atmosphere SKU. As of November 2026,
its [global pricing](https://developers.google.com/maps/billing-and-pricing/pricing)
includes 1,000 free requests per month and then charges for further requests.
Its [caching rules](https://developers.google.com/maps/documentation/places/web-service/policies)
do not allow storing review text as a general performance cache, so this
integration does not use Places API.

## Obtain access and credentials

1. Use a Google account that owns or manages the verified Business Profiles
   for the restaurant locations. Create or select a Google Cloud project.
2. Submit the **Application for Basic API Access** linked from Google's
   [Business Profile prerequisites](https://developers.google.com/my-business/content/prereqs).
   A quota of 0 means access has not been granted. Wait for approval.
3. Enable **Google My Business API**, **My Business Account Management API**,
   and **My Business Business Information API** in that project. Follow the
   [basic setup](https://developers.google.com/my-business/content/basic-setup).
4. Configure an OAuth consent screen and a **Web application** OAuth client.
   Add `https://developers.google.com/oauthplayground` as an authorized
   redirect URI for the one-time setup. In [OAuth Playground](https://developers.google.com/oauthplayground/),
   enable **Use your own OAuth credentials**, enter that client ID and secret,
   and authorize the `https://www.googleapis.com/auth/business.manage` scope
   using the profile owner/manager account. Exchange the authorization code
   for tokens and securely retain the **refresh token**. Do not commit it or
   paste it into a public issue or chat. Google documents this
   [OAuth flow](https://developers.google.com/my-business/content/basic-setup).
5. In OAuth Playground, use the access token to request
   `GET https://mybusinessaccountmanagement.googleapis.com/v1/accounts`.
   For each account, request
   `GET https://mybusinessbusinessinformation.googleapis.com/v1/accounts/ACCOUNT_ID/locations?readMask=name,title,storefrontAddress`.
   Match each response to the actual restaurant address. The returned
   `locations/LOCATION_ID` combines with its account as
   `accounts/ACCOUNT_ID/locations/LOCATION_ID`. The
   [account](https://developers.google.com/my-business/reference/accountmanagement/rest/v1/accounts/list)
   and [location](https://developers.google.com/my-business/content/location-data)
   docs describe these endpoints.

## Wasmer configuration

In the Wasmer app dashboard, go to **Settings → Environment Vars**, add the
following secrets, then choose **Save and Redeploy**. The
[Wasmer secrets guide](https://docs.wasmer.io/edge/learn/secrets/) documents
these steps. Do not place credentials in PHP files, `app.yaml`, Git, or a
public `.env` file.

| Variable | Value |
| --- | --- |
| `GOOGLE_REVIEWS_CLIENT_ID` | OAuth web client ID |
| `GOOGLE_REVIEWS_CLIENT_SECRET` | OAuth web client secret |
| `GOOGLE_REVIEWS_REFRESH_TOKEN` | Owner/manager OAuth refresh token |
| `GOOGLE_REVIEWS_LOCATION_BAYMEADOWS` | `accounts/ACCOUNT_ID/locations/LOCATION_ID` |
| `GOOGLE_REVIEWS_LOCATION_TOWNCENTER` | Same format, for Towncenter |
| `GOOGLE_REVIEWS_LOCATION_DAYTONA` | Same format, for Daytona Beach |
| `GOOGLE_REVIEWS_LOCATION_PALMCOAST` | Same format, for Palm Coast |
| `GOOGLE_REVIEWS_CACHE_DIR` | A writable directory outside the web root, preferably `/reviews-cache` on a Wasmer volume |

The four optional `GOOGLE_REVIEWS_MAPS_BAYMEADOWS`,
`GOOGLE_REVIEWS_MAPS_TOWNCENTER`, `GOOGLE_REVIEWS_MAPS_DAYTONA`, and
`GOOGLE_REVIEWS_MAPS_PALMCOAST` variables can hold each listing's public
`https://www.google.com/maps/...` URL. If absent, the review card links to a
Google Maps search for that restaurant. Use exact listing URLs when available.

For a persistent cache on Wasmer, configure a private volume outside the
website's document root in your Wasmer app configuration:

```yaml
volumes:
  - name: google-reviews-cache
    mount: /reviews-cache
```

Then set `GOOGLE_REVIEWS_CACHE_DIR=/reviews-cache`. The
[Wasmer volumes guide](https://docs.wasmer.io/edge/learn/volumes/)
explains how to add a volume. Without a persistent volume, the PHP temporary
directory may be instance-local and the cache may disappear on restart or
scale-out. The endpoint fails closed if the configured directory is not
writable, avoiding an unbounded number of uncached API calls.

## Behavior and policy

- Reviews are requested only when the section nears the viewport. A failed
  request changes only the review section, not the rest of the page.
- The server caches the **raw** Business Profile response per location or
  account batch for one hour. On an upstream failure, it can serve that
  response for no more than 24 hours, then deletes it. Cache files are outside
  the public web root and have restricted permissions. This is within the
  [Business Profile policy](https://developers.google.com/my-business/content/policies)
  permitting limited, secure performance storage for at most 30 days.
- Cards show the author's name and photo when Google supplies them, original
  text, rating, date, restaurant, and a Google Maps listing link. Anonymous
  reviews have no Google profile image, so a letter avatar is shown instead.
- Google can revoke or expire refresh tokens. An external OAuth app left in
  **Testing** usually has refresh tokens that expire after seven days for
  this scope. Move the consent app to **In production** and complete any
  required verification before relying on it for the live site. See Google's
  [token guidance](https://developers.google.com/identity/protocols/oauth2).

## Verify after deployment

1. Open the homepage and `jacksonville.php`, scroll to reviews, and confirm
   the homepage shows configured locations while Jacksonville shows only
   Baymeadows. Check names, photos, ratings, dates, text, and Google links.
2. In browser Network, confirm `/api/google-reviews.php?location=all` and
   `?location=baymeadows` return `status: "ok"` with no credentials exposed.
3. Reload within an hour and confirm the review endpoint remains responsive.
   Inspect server logs for OAuth or permission errors if it does not.
4. Temporarily remove a credential in a non-production environment: the
   endpoint should return `status: "static"` for Baymeadows and `all`, and the
   header, carousel sections, navigation, and footer should still render.

Local service tests: `php tests/google-reviews.php`.
