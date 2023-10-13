var numberOfDrumButtons = document.querySelectorAll(".drum").length;

for (var i = 0; i<numberOfDrumButtons; i++){

    document.querySelectorAll("button")[i].addEventListener("click", handleClick);

    function handleClick(){
        playlist = {
            'sound_1' : 'sounds/crash.mp3'
            'sound_2' : 'sounds/kick-bass.mp3'
            'sound_3' : 'sounds/snare.mp3'
            'sound_4' : 'sounds/tom-1.mp3'
            'sound_5' : 'sounds/tom-2.mp3'
            'sound_6' : 'sounds/tom-3.mp3'
            'sound_7' : 'sounds/tom-4.mp3'
        }
        var music = document.querySelectorAll("sounds_")[i]
        var audio = new Audio("music.mp3");
        audio.play();

    }
}