<html>
<head>
    <title>Places I have been</title>
</head>
<body>
    <h1>Places I have been</h1>
    {% if places is not empty %}
        <p>Here are all your cities:</p>
        <ul>
            {% for place in places %}
                <li>{{ place.getLocation}} </li>
                <li>{{ place.getDuration}} </li>
                <li><p><img src="{{ place.getImage }}"></p></li>
                <p>-----------</p>
            {% endfor %}
        </ul>
    {% endif %}

    <form action='/places' method='post'>
        <label for='location'>Place location</label>
        <input id='location' name='location' type='text'>
        <label for='duration'>Length of Stay</label>
        <input id='duration' name='duration' type='text'>
        <label for='image'>Your photos here</label>
        <input id='image' name='image' type='link'>

        <button type='submit'>Add place</button>
    </form>

    <form action='/delete_places' method='post'>
        <button type='submit'>Clear</button>
        </form>

</body>
</html>
