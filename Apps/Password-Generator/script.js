"use strict";

const topLabelOption = document.getElementById("top__label");
const customInput = document.getElementById("custom__input");
const checkbox = document.getElementById("checkbox");
const checkboxInput = document.getElementById("checkbox__input");
const button = document.getElementsByTagName("button")[0];
const customWrapper = document.getElementsByClassName("customWrapper")[0];
const output = document.getElementById("output");
let n = 0;
// 表示処理
topLabelOption.addEventListener('click', () => {
    if (topLabelOption.value === "カスタム") {
        n++;
        checkbox.checked = true;
        customWrapper.style.display = "block";
        if (n % 1 === 0) {
            customInput.style.display = "block";
        } else {
            customInput.style.display = "none";
        }
    } else {
        customInput.style.display = "none";
    }
});

// Main function
button.addEventListener('click', () => {
    if (topLabelOption.value !== "なし") {
        const random = Math.floor(Math.random() * 9) + 1;
        const words = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        const index = Number(checkboxInput.value);

        let label = topLabelOption.value === "カスタム" ? customInput.value : topLabelOption.value;
        output.innerHTML = `出力: ${label.charAt(0).toUpperCase()}${random}.${document.getElementsByTagName("input")[0].value}${Array.from(Array(index)).map(() => words[Math.floor(Math.random() * words.length)]).join('')}`;
    }
});

// 表示処理
checkbox.addEventListener('click', () => {
    customWrapper.style.display = checkbox.checked ? "block" : "none";
});
