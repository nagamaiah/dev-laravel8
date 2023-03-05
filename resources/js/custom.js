
let Student = {}
Student.name = "rasool"
Student.age = 23

console.log('from custom js file...')
console.log(Student)

let myNodeList = document.querySelectorAll('h3')

myNodeList.forEach(ele => console.log(ele.innerHTML))

let nodeListArr = Array.from(myNodeList)
let nodeListSpread = [...myNodeList]

// console.log(nodeListArr);
// console.log(nodeListSpread);

// alert($('h3').text())