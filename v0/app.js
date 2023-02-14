// (c) Devs d`e Nepal
const Synth = Window.speechSynthesis;
words = ["weird", "receive", "believe", "accommodate", "separate", "conscience", "embarrass", "liaison", "leisure", "supersede", "rhythm", "maintenance", "restaurant", "misspell", "guarantee", "necessary", "maneuver", "occurrence", "privilege", "precede"]
used_words =[]
function speak(text){
    if(text !== "undefined"){
 let utterance = new SpeechSynthesisUtterance(text);
 speechSynthesis.speak(utterance);
    }
    else{
        
        let utterance = new SpeechSynthesisUtterance(choose_word());
        speechSynthesis.speak(utterance);
    }
}
function speak_n_count(span){
for(x=0;x<span+1;x++){
    if(x!==0){speak(x)}
}
}
function choose_word(){
    let word_chosen = Math.floor(Math.random()*19);
    if(used_words.includes(words[word_chosen]) == true|| words[word_chosen] == undefined){
        choose_word()
    }
        else{
            used_words.push(words[word_chosen]);
            return words[word_chosen];
        }
}
function play(){
    // greet user
speak("Hi ! I am here to guide you  dear learner, this platform is being developed by Developer Gautam Kumar and will be develped soon. Now be ready for the dictation. Here is your 10 seconds for preparing your copy and pen.")
speak_n_count(10)
    for(x=0;x<10;x++){
        if(x==0){
            sentence = "Your first word is "+ choose_word();
            speak(sentence)
            speak("waiting for 2 seconds");speak("1");speak("2");
        }
        if(x==1){
           sentence = "Yoursecond word is "+ choose_word();speak(sentence);
            speak("waiting for 2 seconds");speak("1");speak("2");
        }
        if(x==2){
           sentence = "Yourthird word is "+ choose_word();speak(sentence);
            speak("waiting for 2 seconds");speak("1");speak("2");
        }
        if(x==3){
           sentence = "Yourfourth word is "+ choose_word();speak(sentence);
            speak("waiting for 2 seconds");speak("1");speak("2");
        }
        if(x==4){
           sentence = "Yourfifth word is "+ choose_word();speak(sentence);
            speak("waiting for 2 seconds");speak("1");speak("2");
        }
        if(x==5){
           sentence = "Yoursixth word is "+ choose_word();speak(sentence);
            speak("waiting for 2 seconds");speak("1");speak("2");
        }
        if(x==6){
           sentence = "Yourseventh word is "+ choose_word();speak(sentence);
            speak("waiting for 2 seconds");speak("1");speak("2");
        }
        if(x==7){
           sentence = "Youreight word is "+ choose_word();speak(sentence);
            speak("waiting for 2 seconds");speak("1");speak("2");
        }
        if(x==8){
           sentence = "Yourninth word is "+ choose_word();speak(sentence);
            speak("waiting for 2 seconds");speak("1");speak("2");
        }
        if(x==9){
            sentence ="Last but not the least the word is "+ choose_word();speak(sentence)
        }
    }
}
play()
function pause(){
    if(SpeechSynthesis.speaking){
       Synth.pause();
        document.getElementById("el3").innerHTML ='<i class="fa-solid fa-circle-stop"></i> Resume'
    }
    else{
        Synth.resume();
        document.getElementById("el3").innerHTML = '<i class="fa-regular fa-circle-pause"></i> Pause'
    }
}
