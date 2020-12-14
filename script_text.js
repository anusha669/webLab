var text_size = 10
var time_out1, time_out2
var text 

function startAnim() {
    text = document.getElementById('text');
    time_out1 = window.setInterval("incr()",100);   // after 100ms incr size
}

function incr(){
    text_size += 1;
    text.innerHTML = "Incrementing!!! Current font size is " + text_size;
    text.style.fontSize = text_size + "pt";
    text.style.color = "red";
    if(text_size > 49)      // after incr size till 48 we shall remove the timer set for incr and create another timer for decr size
    {
        window.clearInterval(time_out1); 
        time_out2 = window.setInterval("decr()",500);
    }  
}

function decr(){
    text_size -= 1;
    text.innerHTML = "Decrementing!!! Current font size is " + text_size;
    text.style.fontSize = text_size + "pt";
    text.style.color = "green";
    if(text_size < 10)
    {
        window.clearInterval(time_out2);
        time_out1 = window.setInterval("incr()",1000);
    }
}