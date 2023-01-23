<form>
    <input id="unique_id" type="text" placeholder="Unique ID" />
    <div id="button">Go</div>
</form>


<script>
    document.getElementById("button").onclick = function () { findItinerary() };
    function findItinerary() {
        var url = document.getElementById('unique_id').value;
        window.location.href = window.location.href + url;
        //console.log(url);
    }
</script>