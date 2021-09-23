function f_upper_case(){
    let text = document.querySelector(".textarea").value;
    document.querySelector(".textarea").value = text.toUpperCase();
}

function f_lower_case(){
    let text = document.querySelector(".textarea").value;
    document.querySelector(".textarea").value = text.toLowerCase();
}

function f_proper_case(){
    let text = document.querySelector(".textarea").value;
    let lower_text = text.toLowerCase();
    let words = lower_text.split(" ");
    let new_words = [];
    for(let i of words){
        let new_i = i[0].toUpperCase() + i.slice(1);
        new_words.push(new_i);
    }
    let proper_text = new_words.join(" ");
    document.querySelector(".textarea").value = proper_text;
}

function f_sentence_case(){
    let text = document.querySelector(".textarea").value;
    let lower_text = text.toLowerCase();
    let sentences = lower_text.split(". ");
    let new_sentences = [];
    for(let j of sentences){
        let new_j = j[0].toUpperCase() + j.slice(1);
        new_sentences.push(new_j);
    }
    let sentence_text = new_sentences.join(". ");
    document.querySelector(".textarea").value = sentence_text;
}

function download(filename, text) {
    var element = document.createElement('a');
    element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
    element.setAttribute('download', filename);

    element.style.display = 'none';
    document.body.appendChild(element);

    element.click();

    document.body.removeChild(element);
}

function f_save_file_text(){
    let text = document.querySelector(".textarea").value;
    download("text.txt",text);
}