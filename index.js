function jour() {
    var months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Decembre'];
    var today = new Date();
    today.setTime(today.getTime());
    document.getElementById("day").innerHTML = today.getDate();
    document.getElementById("month").innerHTML = months[today.getMonth()];
}