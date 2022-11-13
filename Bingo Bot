// ==UserScript==
// @name         BiBo-L-start
// @namespace    http://tampermonkey.net/
// @version      0.1
// @description   for Bing
// @author       Vadim Bogomolov
// @match        https://www.bing.com/*
// @icon         data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==
// @grant        none
// ==/UserScript==

let links = document.links;
let search_icon = document.getElementById("search_icon");
let keywords = ["10 самых популярных шрифтов от Google", "Отключение редакций и ревизий в WordPress", "Вывод произвольных типов записей и полей в WordPress",];
let keyword = keywords[getRandom(0, keywords.length)];

if (window.location.toString().includes("search")) {
  
for (let i = 0; i < links.length; i++) {
    if (links[i].href.indexOf("napli.ru") !== -1) {
        let link = links[i];
        link.click();
       // console.log("Нашел строку " + links[i])
       break;}
  }
}
else {document.getElementsByName("q")[0].value = keyword; search_icon.click();}

function getRandom(min, max) {
  return Math.floor(Math.random() * (max - min) + min);}

