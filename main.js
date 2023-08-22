// https://api.nytimes.com/svc/mostpopular/v2/emailed/7.json?api-key=hiZS5033fZYaEkVVwrG8BjR72G1D61oA

async function getNews(){
    await fetch('https://api.nytimes.com/svc/mostpopular/v2/emailed/7.json?api-key=hiZS5033fZYaEkVVwrG8BjR72G1D61oA')
    .then(d => d.json())
    .then(response => {
        console.log(response.results);
        for (let i = 0; i < response.results.length; i++) {
            console.log(response.results[i].title);
            const output = document.getElementById('output');

            try {
                output.innerHTML += `
                <div class="card">
                <div class="card-body">
                <img src="${response.results[i]['media'][0]['media-metadata'][2].url}"
                alt="${response.results[i]['media'][0].caption}" title="${response.results[i]['media'][0].caption}" />
                <h2> ${response.results[i].title}</h2>
                <div class="card-text">
                 <p>${response.results[i].abstract}</p>
                
                </div>
                </div>
                </div>
                <br>
                `
            } catch (err) {
                console.log(err);
                
            }
            
        }
        document.getElementById('copyright').innerHTML = response.copyright;
    })
}

getNews()