/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function showOrHide(bloggood, cat) {
    bloggood = document.getElementById(bloggood);
    cat = document.getElementById(cat);
    if (bloggood.checked)
        cat.style.display = "block";
    else
        cat.style.display = "none";
}