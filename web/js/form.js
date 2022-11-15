$('form').submit(function(event) {
    event.preventDefault();
    const apiKey = 'eJiPmy3rihf6FdqTzgAG4W5wcXP0c80j';
    const url = 'https://api.giphy.com/v1/gifs/search?';
    const topicToSearch = $('input').val();
    const limit = $('select').val();

    fetch(url+`q=${topicToSearch}&api_key=${apiKey}&limit=${limit}`)
        .then(response => response.json())
        .then(responseSerialized => {
            const {data} = responseSerialized;
            $('#rowToWrite').empty();
            data.map((gifObject, index) => {
                
                return $(`
                <div class="col-3 p-5 mb-3 ms-5 card">
                    <div class="card-header text-center">
                        ${index+1}
                    </div>
                    <div class="card-body text-center">
                        <img src="${gifObject.images.downsized.url}" width="90" height="90"/>
                    </div>
                    <div class="card-footer text-center">
                        Topic: ${topicToSearch}
                    </div>
                </div>
                `).appendTo('#rowToWrite')
            });

            $('input').val('');
        }).catch(error => {
            console.error(error);
        })
}); 