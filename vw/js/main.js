window.addEventListener("DOMContentLoaded", function(ev)
{
  if ('serviceWorker' in navigator)
  {
    navigator.serviceWorker.register('./sw.js');
  }
});