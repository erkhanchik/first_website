var count = 0;
document.getElementById("mybutton").onclick = function () {
    count++;
     if (count%2 == 0) { 
        document.getElementById("demo").innerHTML = "";
     } else {
        var img = document.createElement("img");

        img.src = "https://avatars.dzeninfra.ru/get-zen_doc/5234501/pub_6368ea3044dbb37ff9476528_63690edfea3e7038b26166df/scale_1200";

        document.getElementById("demo").appendChild(img);
    }
}