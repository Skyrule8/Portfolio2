/*var k = [38, 40, 37, 39, 13],*/
var k = [67, 65, 70, 69, 13],
n = 0;
$(document).keydown(function (e) {
    if (e.keyCode === k[n++]) {
        if (n === k.length) {
            document.location.href = "mailto:loickthorel1999@gmail.com?subject=EasterEgg&body=Vous gagnez votre café! "// à remplacer par votre code
            n = 0;
            return false;
        }
    }
    else {
        n = 0;
    }
});