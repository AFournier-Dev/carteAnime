const lines = document.querySelectorAll('line')
console.log(lines)
setTimeout(() => {
    lines.forEach(line => {
        line.classList.add('Transmition');
    });
},  5000);