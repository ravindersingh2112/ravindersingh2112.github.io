
(function () {
var names = ["Jaya", "Jeb", "Ravinder", "Sonu", "Harry", "Jarry", "Salman", "Jacob", "Lester", "Jester"];
for (var i = 0; i < names.length; i++) {
  var firstLetter = names[i].charAt(0).toLowerCase();
   if (firstLetter=='j') {
     byeSpeaker.speak(names[i]);
    } else {
     helloSpeaker.speak(names[i]);
    }
}
})();
