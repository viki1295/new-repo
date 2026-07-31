<form id="aiForm">
    <input type="text" id="prompt" placeholder="Enter your prompt" />
    <button type="submit">Send</button>
</form>

<div id="response"></div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    document.getElementById('aiForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const prompt = document.getElementById('prompt').value;

        axios.post('/ai/generate', { prompt: prompt })
            .then(function(response) {
                document.getElementById('response').innerText = response.data.response;
            })
            .catch(function(error) {
                console.error('Error:', error);
            });
    });
</script>
