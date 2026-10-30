const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)');
const navToggle = document.querySelector('.nav-toggle');
const navigation = document.querySelector('#inner-nav');
function closeNavigation() { navigation.classList.remove('is-open'); navToggle.setAttribute('aria-expanded','false'); navToggle.setAttribute('aria-label','Open navigation'); }
navToggle.addEventListener('click',()=>{ const open=navToggle.getAttribute('aria-expanded')!=='true'; navigation.classList.toggle('is-open',open); navToggle.setAttribute('aria-expanded',String(open)); navToggle.setAttribute('aria-label',open?'Close navigation':'Open navigation'); });
navigation.querySelectorAll('a').forEach(link=>link.addEventListener('click',closeNavigation));
document.addEventListener('keydown',event=>{if(event.key==='Escape' && navToggle.getAttribute('aria-expanded')==='true'){closeNavigation();navToggle.focus();}});
const galleryDialog=document.querySelector('#gallery-dialog');
let galleryTrigger;
document.querySelectorAll('[data-gallery]').forEach(button=>button.addEventListener('click',()=>{galleryTrigger=button;const image=galleryDialog.querySelector('img');image.src=button.dataset.gallery;image.alt=button.dataset.caption;galleryDialog.querySelector('p').textContent=button.dataset.caption;galleryDialog.showModal();}));
galleryDialog.querySelector('button').addEventListener('click',()=>galleryDialog.close());
galleryDialog.addEventListener('close',()=>galleryTrigger?.focus());
if(!prefersReduced.matches && 'IntersectionObserver' in window){const observer=new IntersectionObserver(entries=>entries.forEach(entry=>{if(entry.isIntersecting){entry.target.classList.add('visible');observer.unobserve(entry.target);}}),{threshold:.07});document.querySelectorAll('.section-title,.hosting-note>h2,.enquiry-story,.menu-assurance>h2').forEach(element=>{element.classList.add('subtle-reveal');observer.observe(element);});document.body.classList.add('motion-on');}
const money=value=>new Intl.NumberFormat('en-US',{style:'currency',currency:'USD'}).format(value);
function createLocationCart(){
 const root=document.querySelector('[data-location-cart]');
 if(!root)return null;
 const locationId=root.dataset.locationId;
 const storageKey='5th-element:cart:v1:'+locationId;
 const defaultImage=root.dataset.defaultImage;
 const count=root.querySelector('[data-cart-count]');
 const itemsNode=root.querySelector('[data-cart-items]');
 const subtotal=root.querySelector('[data-cart-subtotal]');
 const total=root.querySelector('[data-cart-total]');
 const drawer=root.querySelector('[data-cart-drawer]');
 const scrim=root.querySelector('[data-cart-scrim]');
 const confirmation=root.querySelector('[data-cart-confirmation]');
 let lastTrigger;
 let items=[];
 try{const stored=JSON.parse(localStorage.getItem(storageKey)||'[]');items=Array.isArray(stored)?stored.filter(item=>item&&item.key&&Number.isFinite(Number(item.price))&&Number(item.quantity)>0).map(item=>({...item,price:Number(item.price),quantity:Math.min(999,Math.max(1,Math.floor(Number(item.quantity))))})):[];}catch(error){items=[];}
 const save=()=>{try{localStorage.setItem(storageKey,JSON.stringify(items));}catch(error){/* Cart remains available for this session when storage is unavailable. */}};
 const notify=()=>document.dispatchEvent(new CustomEvent('locationcartchange',{detail:{locationId,items:items.slice()}}));
 const cartTotal=()=>items.reduce((sum,item)=>sum+item.price*item.quantity,0);
 const itemCount=()=>items.reduce((sum,item)=>sum+item.quantity,0);
 const text=(tag,value,className)=>{const element=document.createElement(tag);element.textContent=value;if(className)element.className=className;return element;};
 function render(){
  const quantity=itemCount();count.textContent=quantity;count.setAttribute('aria-label',quantity+' '+(quantity===1?'item':'items'));
  itemsNode.replaceChildren();
  if(!items.length){itemsNode.append(text('p','Your cart is waiting for the first dish.','cart-empty'));}
  items.forEach(item=>{
   const row=document.createElement('article');row.className='cart-item';
   const image=document.createElement('img');image.src=item.image||defaultImage;image.alt='';image.loading='lazy';
   const info=document.createElement('div');info.className='cart-item-copy';info.append(text('h3',item.name),text('p',item.label+(item.people?' · '+item.people:'')),text('strong',money(item.price),'cart-unit-price'));
   const controls=document.createElement('div');controls.className='cart-item-controls';
   const decrement=text('button','−');decrement.type='button';decrement.setAttribute('aria-label','Reduce '+item.name);decrement.addEventListener('click',()=>setQuantity(item.key,item.quantity-1));
   const quantityLabel=text('span',String(item.quantity));quantityLabel.setAttribute('aria-label',item.quantity+' '+(item.quantity===1?'item':'items'));
   const increment=text('button','+');increment.type='button';increment.setAttribute('aria-label','Increase '+item.name);increment.addEventListener('click',()=>setQuantity(item.key,item.quantity+1));
   const remove=text('button','Remove','cart-remove');remove.type='button';remove.addEventListener('click',()=>removeItem(item.key));
   controls.append(decrement,quantityLabel,increment,remove);
   const lineTotal=text('strong',money(item.price*item.quantity),'cart-line-total');
   row.append(image,info,controls,lineTotal);itemsNode.append(row);
  });
  const sum=cartTotal();subtotal.textContent=money(sum);total.textContent=money(sum);
 }
 function openDrawer(trigger){lastTrigger=trigger||document.activeElement;scrim.hidden=false;drawer.setAttribute('aria-hidden','false');document.body.classList.add('cart-open');requestAnimationFrame(()=>drawer.classList.add('is-open'));root.querySelector('[data-cart-close]').focus();}
 function closeDrawer(){drawer.classList.remove('is-open');drawer.setAttribute('aria-hidden','true');document.body.classList.remove('cart-open');setTimeout(()=>{if(drawer.getAttribute('aria-hidden')==='true')scrim.hidden=true;},250);if(lastTrigger instanceof HTMLElement)lastTrigger.focus();}
 function showConfirmation(item){
  confirmation.querySelector('[data-cart-confirmation-image]').src=item.image||defaultImage;
  confirmation.querySelector('[data-cart-confirmation-name]').textContent=item.name;
  confirmation.querySelector('[data-cart-confirmation-details]').textContent=item.quantity+' × '+item.label+(item.people?' · '+item.people:'');
  confirmation.querySelector('[data-cart-confirmation-price]').textContent=money(item.price*item.quantity);
  confirmation.hidden=false;requestAnimationFrame(()=>confirmation.classList.add('is-visible'));
 }
 function closeConfirmation(){confirmation.classList.remove('is-visible');setTimeout(()=>{if(!confirmation.classList.contains('is-visible'))confirmation.hidden=true;},180);}
 function add(product){
  const existing=items.find(item=>item.key===product.key);if(existing)existing.quantity=Math.min(999,existing.quantity+1);else items.push({...product,quantity:1,image:product.image||defaultImage});
  save();render();notify();const changed=items.find(item=>item.key===product.key);showConfirmation(changed);return items;
 }
 function setQuantity(key,quantity){const item=items.find(entry=>entry.key===key);if(!item)return;item.quantity=Math.floor(Number(quantity)||0);if(item.quantity<1)items=items.filter(entry=>entry.key!==key);else item.quantity=Math.min(999,item.quantity);save();render();notify();}
 function removeItem(key){items=items.filter(item=>item.key!==key);save();render();notify();}
 root.querySelector('[data-cart-open]').addEventListener('click',event=>openDrawer(event.currentTarget));
 root.querySelector('[data-cart-close]').addEventListener('click',closeDrawer);scrim.addEventListener('click',closeDrawer);
 root.querySelectorAll('[data-cart-continue]').forEach(button=>button.addEventListener('click',closeConfirmation));
 root.querySelector('[data-cart-view]').addEventListener('click',()=>{closeConfirmation();openDrawer(root.querySelector('[data-cart-open]'));});
 document.addEventListener('keydown',event=>{if(event.key==='Escape'){if(!confirmation.hidden)closeConfirmation();else if(drawer.getAttribute('aria-hidden')==='false')closeDrawer();}});
 render();return {add,setQuantity,remove:removeItem,items:()=>items.slice()};
}
const locationCart=createLocationCart();
const menuNode=document.querySelector('#catering-data');
let enquiryItems=locationCart?locationCart.items():[];
let menuSummary=()=>'';
if(menuNode){
 const categories=JSON.parse(menuNode.textContent);
 const dishes=categories.flatMap((category,categoryIndex)=>category.items.map((item,itemIndex)=>({...item,category:category.label,categoryIndex,id:categoryIndex+'-'+itemIndex})));
 
 let currentCategory='all',search='',shown=24;
 const results=document.querySelector('#dish-results');
 const loadMore=document.querySelector('#load-more');
 const textElement=(tag,text,className)=>{const el=document.createElement(tag);el.textContent=text;if(className)el.className=className;return el;};
 function optionFor(dish,index){if(dish.options?.length){const o=dish.options[index];return {label:o.size,people:o.people,price:Number(o.price)};}return {label:dish.unit||'Per item',people:'',price:Number(String(dish.simple||'').replace(/[^\d.]/g,''))};}
 function render(){
  const filtered=dishes.filter(dish=>(currentCategory==='all'||String(dish.categoryIndex)===currentCategory)&&dish.name.toLowerCase().includes(search));
  document.querySelector('#result-title').textContent=currentCategory==='all'?'All dishes':categories[Number(currentCategory)].label;
  document.querySelector('#result-count').textContent=filtered.length+' dishes · '+Math.min(shown,filtered.length)+' shown';
  results.replaceChildren();
  if(!filtered.length)results.append(textElement('p','No dishes found. Try another search or category.','empty-results'));
  filtered.slice(0,shown).forEach(dish=>{
   const card=document.createElement('article');card.className='menu-dish';
   card.append(textElement('p',dish.category,'dish-category'),textElement('h3',dish.name));
   let selectedIndex=0;
   const price=textElement('strong',money(optionFor(dish,0).price),'dish-price');
   if(dish.options?.length){const label=textElement('label','Choose a tray');label.htmlFor='tray-'+dish.id;const select=document.createElement('select');select.id=label.htmlFor;dish.options.forEach((option,index)=>{const el=document.createElement('option');el.value=index;el.textContent=option.size+' · '+option.people+' · '+money(option.price);select.append(el);});select.addEventListener('change',()=>{selectedIndex=Number(select.value);price.textContent=money(optionFor(dish,selectedIndex).price);});card.append(label,select);}else{card.append(textElement('p',dish.unit||'Per item','unit-note'));}
   const row=document.createElement('div');row.className='dish-buy-row';const add=textElement('button','Add to cart +');add.type='button';add.setAttribute('aria-label','Add '+dish.name+' to cart');add.addEventListener('click',()=>{const option=optionFor(dish,selectedIndex);const key=dish.id+'-'+selectedIndex;const product={key,name:dish.name,...option,image:dish.image||'/assets/images/catering.webp'};if(locationCart)enquiryItems=locationCart.add(product);else{const existing=enquiryItems.find(item=>item.key===key);if(existing)existing.quantity++;else enquiryItems.push({...product,quantity:1});}renderQuote();document.querySelector('#quote-status').textContent=dish.name+' added to your cart.';add.textContent='Added ✓';setTimeout(()=>{add.textContent='Add to cart +';},900);});row.append(price,add);card.append(row);results.append(card);
  });
  loadMore.hidden=shown>=filtered.length;
 }
 function renderQuote(){const holder=document.querySelector('#quote-items');holder.replaceChildren();if(!enquiryItems.length)holder.append(textElement('p','Your cart is empty. Add a dish to get started.'));enquiryItems.forEach(item=>{const row=document.createElement('div');row.className='quote-item';const info=document.createElement('div');info.append(textElement('strong',item.name),textElement('small',item.label+(item.people?' · '+item.people:'')));const quantity=document.createElement('input');quantity.type='number';quantity.min='1';quantity.max='999';quantity.value=item.quantity;quantity.setAttribute('aria-label','Quantity for '+item.name+' '+item.label);quantity.addEventListener('input',()=>{const next=Math.max(1,Math.min(999,Math.floor(Number(quantity.value)||1)));if(locationCart){locationCart.setQuantity(item.key,next);enquiryItems=locationCart.items();renderQuote();}else{item.quantity=next;amount.textContent=money(item.price*item.quantity);document.querySelector('#quote-total').textContent=money(enquiryItems.reduce((total,entry)=>total+entry.price*entry.quantity,0));}});const amount=textElement('span',money(item.price*item.quantity));const remove=textElement('button','Remove');remove.type='button';remove.setAttribute('aria-label','Remove '+item.name+' '+item.label);remove.addEventListener('click',()=>{if(locationCart){locationCart.remove(item.key);enquiryItems=locationCart.items();}else enquiryItems=enquiryItems.filter(entry=>entry.key!==item.key);renderQuote();document.querySelector('#quote-status').textContent=item.name+' removed.';});row.append(info,quantity,amount,remove);holder.append(row);});document.querySelector('#quote-total').textContent=money(enquiryItems.reduce((total,item)=>total+item.price*item.quantity,0));}
 menuSummary=()=>enquiryItems.map(item=>item.quantity+' × '+item.name+' — '+item.label+' ('+money(item.price*item.quantity)+')').join('\n');
 document.querySelectorAll('[data-category]').forEach(button=>button.addEventListener('click',()=>{currentCategory=button.dataset.category;shown=24;document.querySelectorAll('[data-category]').forEach(item=>item.setAttribute('aria-pressed',String(item===button)));render();}));
 document.querySelector('#dish-search').addEventListener('input',event=>{search=event.target.value.trim().toLowerCase();shown=24;render();});
 loadMore.addEventListener('click',()=>{shown+=24;render();});
 document.addEventListener('locationcartchange',event=>{if(event.detail.locationId===menuNode.dataset.cartLocationId){enquiryItems=event.detail.items;renderQuote();}});
 render();renderQuote();
}
document.querySelectorAll('[data-email-draft]').forEach(form=>{
 const dateInput=form.querySelector('[name=date]');const today=new Date();const localDate=today.getFullYear()+'-'+String(today.getMonth()+1).padStart(2,'0')+'-'+String(today.getDate()).padStart(2,'0');dateInput.min=localDate;
 form.addEventListener('submit',event=>{event.preventDefault();const fields=new FormData(form);const lines=Array.from(fields,([key,value])=>key.charAt(0).toUpperCase()+key.slice(1)+': '+value);const selection=menuSummary();if(selection)lines.push('\nMenu enquiry:\n'+selection,'\nPrices are indicative; please confirm availability and final quote.');const body=lines.join('\n');const subjectPrefix=form.dataset.emailSubject||'Catering enquiry';const mailto='mailto:caterings@my5thelement.com?subject='+encodeURIComponent(subjectPrefix+' — '+fields.get('occasion'))+'&body='+encodeURIComponent(body);const status=form.querySelector('.form-status');status.replaceChildren(document.createTextNode('Your details are ready. '));const draftLink=document.createElement('a');draftLink.className='quiet-link';draftLink.textContent='Open email draft ↗';status.append(draftLink);draftLink.href=mailto;status.append(document.createTextNode(' Review and send the email in your mail app.'));draftLink.focus();});
});


document.querySelectorAll('[data-branch-image]').forEach(link=>{
 const showBranch=()=>{
  document.querySelectorAll('[data-branch-image]').forEach(item=>item.classList.toggle('active',item===link));
  const photo=document.querySelector('#branch-photo'); photo.src=link.dataset.branchImage; photo.alt=link.dataset.branchName+' catering selection';
  document.querySelector('#branch-name').textContent=link.dataset.branchName;
  document.querySelector('#branch-description').textContent=link.dataset.branchDescription;
 };
 link.addEventListener('mouseenter',showBranch); link.addEventListener('focus',showBranch);
});
document.querySelectorAll('.scene-toggle').forEach(button=>button.addEventListener('click',()=>{const card=button.closest('[data-service-card]');const active=button.getAttribute('aria-pressed')!=='true';button.setAttribute('aria-pressed',String(active));card.classList.toggle('is-explored',active);button.firstChild.textContent=active?'Detail illuminated ':'Explore the detail ';}));
