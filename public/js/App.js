    let now = new Date();
    let NowWeExists = document.querySelector("#timeFoundation");
    let YearFoundation = 2017;
    let QuantityOfExitstency = "";
    let DateCurrent = now.getFullYear();
    QuantityOfExitstency =  DateCurrent - YearFoundation;
    NowWeExists.textContent += `${QuantityOfExitstency}`;
