(() => {
  const minimumSize = 16;
  const formControls = 'input, select, textarea, button';

  function hasDirectText(element) {
    return Array.from(element.childNodes).some(node => node.nodeType === Node.TEXT_NODE && node.textContent.trim());
  }

  function enforce(element) {
    if (!(element instanceof HTMLElement) || element.matches('svg, use, script, style') || element.closest('svg, .icon-definitions') || element.dataset.minFontExempt !== undefined) return;
    if (!element.matches(formControls) && !hasDirectText(element)) return;
    if (parseFloat(getComputedStyle(element).fontSize) < minimumSize) element.style.setProperty('font-size', `${minimumSize}px`, 'important');
  }

  function enforceWithin(root) {
    enforce(root);
    if (root.querySelectorAll) root.querySelectorAll('*').forEach(enforce);
  }

  enforceWithin(document.body);
  new MutationObserver(records => records.forEach(record => record.addedNodes.forEach(node => {
    if (node.nodeType === Node.ELEMENT_NODE) enforceWithin(node);
  }))).observe(document.body, { childList: true, subtree: true });
})();
