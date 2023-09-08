const questions = [     //met behulp van een 'const' heb ik iedere keer een nieuwe vraag getypt
	{
		question: "In welk jaar is Genshin Impact uitgekomen?",
		alternatives: [{
			a: "2010", //hier staan de antwoorden
			b: "2018",
			c: "2019",
			d: "2020"
		}],		
		answer: "d", //hier komt het juiste antwoord te staan
        info: "Het spel is op 28 september 2020 uitgekomen." //hier staat nog een hele korte uitleg van het goede antwoord
	},
	{
		question: "Hoeveel karakters heeft Genshin Impact?",
		alternatives: [{
			a: "41",
			b: "49",
			c: "56",
			d: "60"
		}],
		answer: "b",
        info: "Het spel heeft (voor nu) 49 karakters. Er komen altijd nieuwe karakters erbij!"
	},
	{
		question: "Hoe oud is de oudste karakter?",
		alternatives: [{
			a: "40 jaar",
			b: "100 jaar",
			c: "3000 jaar",
			d: "6000 jaar"
		}],
		answer: "d",
        info: "Het oudste karakter is 6000 jaar."
	},
	{
		question: "Hoveel mensen (ongv) spelen Genshin Impact?",
		alternatives: [{
			a: "20 miljoen",
			b: "50 miljoen",
			c: "60 miljoen",
			d: "85 miljoen",
		}],
		answer: "b",
        info: "Er zijn 50 miljoen mensen die het spel spelen. "
	},
	{
		question: "Hoe heet het karakter waar je het spel mee begint (keuze uit jongen of meisje)?",
		alternatives: [{
			a: "Zhongli (of) Shenhe",
			b: "Childe (of) Lumine",
			c: "Lumine (of) Aether",
			d: "Itto (of) Keqing"
		}],
		answer: "c",
        info: "Aan het begin van de game moet je een karakter kiezen waar je mee begint met spelen. Je keuze bestaat uit Lumine of Aether."
	},
    {
		question: "Wat is het zeldzaamste item in Genshin Impact?",
		alternatives: [{
			a: "Qingxin flower",
			b: "Primogems",
			c: "Dark iron sword",
			d: "Crown of insight"
		}],		
		answer: "c",
        info: "Het zeldzaamste item is de dark iron sword."
	},
    {
		question: "Welk gerecht in Genshin Impact geeft je het meeste health?",
		alternatives: [{
			a: "Monstadt hash brown",
			b: "Matutake meat rolls",
			c: "Crystal shrimp",
			d: "Golden shrimp balls"
		}],		
		answer: "a",
        info: "Je krijgt het meeste health van Monstadt hash brown."
	},
    {
		question: "Wat is de naam van je 'side kick' in de game?",
		alternatives: [{
			a: "Paimon",
			b: "Libya",
			c: "Aloy",
			d: "Yanfei"
		}],		
		answer: "a",
        info: "Je side kick heet Paimon."
	},
    {
		question: "Wat is de sterkste enemy?",
		alternatives: [{
			a: "Big slime",
			b: "Electrohammer Vangaurd",
			c: "Hilichurl",
			d: "Perpetual Mechanical Array"
		}],		
		answer: "d",
        info: "De sterkste enemy is de Perpetual Mechanical Array."
	},
{
    question: "Wat is het hoogste level wat je kan worden in Genshin Impact?",
    alternatives: [{
        a: "level 90",
        b: "level 100",
        c: "level 80",
        d: "level 75"
    }],		
    answer: "a",
    info: "Het hoogste level dat je kan halen is level 90."
},
];

(
	function(){
		const main = document.querySelector('main'),
					container = document.querySelector('#container-question'),
					pMsg = document.querySelector('#p-msg'),
					play = document.querySelector('#btn-play');
		let point;
		let count;
		point = 0;
		count = 0;
		
		main.addEventListener('click', (e) => {
			printQuestion(e);
			confirmAlternative(e);
			checked(e)
		});
		
		function printQuestion (e) {
			if(e.target.id === 'btn-play' || e.target.id === 'next-question'){
				if(questions.length === count){
				pMsg.textContent = 'Jouw score: ';
				container.innerHTML = '';
				
				let p = document.createElement('p');
						p.textContent = point;
				container.appendChild(p)
			}	
				newQuestion();
			}
		}
		
		function confirmAlternative (e) {
			if(e.target.id === 'btn-confirm'){
				showAlternative();
			}
		}
		
		function checked (e) {
			if(e.target.nodeName === "LABEL"){
				document.querySelector('#btn-confirm').disabled = false;
			}
		} 
		
		function newQuestion () {
			pMsg.textContent = questions[count].question;
			container.innerHTML = '';

			questions[count].alternatives.forEach((item, index) => {
				for(let key in item){
					let input = document.createElement('input');
						input.id = key
						input.setAttribute('type', 'radio');
						input.setAttribute('name', 'question');
						container.appendChild(input);
					let label = document.createElement('label');
						label.innerHTML = item[key];
						label.setAttribute('for', key);
						container.appendChild(label);
				}
			});
			
			let button = document.createElement('button');
					button.textContent = 'Verder';
					button.id = 'btn-confirm';
					button.disabled = true;
					container.appendChild(button);
			count += 1;
		}
		
		function addPoint () {
			point += 1;
		}
		
		function showAlternative () {
			let alternatives = document.querySelectorAll('input[type="radio"]');
			let checked = alternatives.forEach(item => {
				if(item.checked === true){
					container.innerText = '';
					let p = document.createElement('p')
					if(item.id === questions[count - 1].answer){
						addPoint();
						pMsg.innerHTML  = 'Je antwoord is juist' //hier word vertelt dat je antwoord juist is
						p.innerHTML = `Juiste antwoord: ${questions[count - 1].answer.toUpperCase()} <br><br>
						${questions[count - 1].info}`					
					} else {
						pMsg.innerHTML  = 'Je antwoord is fout' //hier word vertelt dat je antwoord fout is
						p.innerHTML = `Juiste antwoord: ${questions[count - 1].answer.toUpperCase()} <br><br>
						${questions[count - 1].info}`
					}
					container.appendChild(p);
					
					let button = document.createElement('button'); //deze button verwijst naar de volgende vraag 
							button.textContent = 'Volgende';
							button.id = 'next-question';
					container.appendChild(button);
				}
			});
		}
	}
)()




