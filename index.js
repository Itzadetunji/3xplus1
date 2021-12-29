function colatz(number) {
  var num = number
  var node = document.querySelector(".cla");
  div = document.createElement("p");
  div.className = `text-center w-full text-black font-medium`;
  div.innerHTML = "Here is the solution for: " + number + " 👇🏿";
  node.parentNode.insertBefore(div, node.prevSibling);
  while(num > 1){
    if (num % 2 == 0) {
      var prevNum = num.toString()
      num = num/2
      var currNum = num.toString()
      // console.log(num)
      var node = document.querySelector(".cla");
      div = document.createElement("div");
      div.className = `text-center w-full bg-green-300 rounded-md text-white py-3 font-medium outline-none`;
      div.innerHTML = prevNum + " / 2 = " + currNum;
      node.parentNode.insertBefore(div, node.prevSibling);
    } else {
      var prevNum = num.toString()
      num = (num * 3) + 1
      var currNum = num.toString()
      // console.log(num)
      var node = document.querySelector(".cla");
      div = document.createElement("div");
      div.className = `text-center w-full bg-red-300 rounded-md text-white py-3 font-medium outline-none`;
      div.innerHTML = "( " + prevNum + " x 3 ) + 1 = " + currNum;
      node.parentNode.insertBefore(div, node.prevSibling);
    } if (num == 1){
      // console.log("End of solution")
      var node = document.querySelector(".cla");
      div = document.createElement("div");
      div.className = `text-center w-full bg-gray-700 rounded-md text-white py-3 font-medium outline-none`;
      div.innerHTML = "End Of Solution | Refresh the page to input another value 😅";
      node.parentNode.insertBefore(div, node.prevSibling);
    }
  }
}