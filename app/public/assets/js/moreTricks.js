const loadMoreBtn = document.getElementById('load-more');
        let offset = 0;
        loadMoreBtn.addEventListener('click', function() {
        offset +=5;
        const url = '{{ path('more_tricks', {'offset': 0}) }}'.replace('0', offset);
        fetch(url)
            .then(response => response.json())
            .then(data => {
                const tricksContainer = document.getElementById('tricks-container');
                tricksContainer.insertAdjacentHTML('beforeend', data.html);
                console.log(document.getElementsByClassName("card-img-top").length % 5)
                if (document.getElementsByClassName("card-img-top").length == {{ tricks|length }}) {
                  loadMoreBtn.style.display = 'none';
                }
            });
        });