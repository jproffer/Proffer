$(document).ready(function() {
$('.cycleContainer').cycle({
    fx:      'scrollDown',
    speedOut: 500,
    speedIn:  1000,
    easeIn:  'bounceout',
    timeout: 0, 
    next: '#selectCity'
});
$('btn_shopnow').click(function() { dlg.show(); });
});
