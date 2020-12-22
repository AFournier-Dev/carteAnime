const lines = document.querySelectorAll('line');
console.log(lines);
setTimeout(() => {
    lines.forEach(line => {
        line.classList.add('Transmition');
    });
},  5000);


const svg = document.querySelector('svg');
function sensDeLecture () {
 //   if(window.orientation === 90 || window.orientation === -90){
     if((window.orientation >=75 && window.orientation<=105) || (window.orientation <=-75 && window.orientation>=-105)){
        svg.setAttribute("viewBox", "352.5 0 474.5 807");
        svg.setAttribute("enable-background", "new 352.5 0 474.5 807");
    }else{
        svg.setAttribute("viewBox", "0 0 1280 807");
        svg.setAttribute("enable-background", "new 0 0 1280 807");
    }
}
sensDeLecture();

console.log(window.orientation);
window.addEventListener("orientationchange", function(event) {
    sensDeLecture();
  });

/*
shape = document.getElementsByTagName("svg")[0];
shape.setAttribute("viewBox", "-250 -250 500 750"); 
*/