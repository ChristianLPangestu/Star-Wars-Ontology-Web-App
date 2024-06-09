<!DOCTYPE html>
<html>
<head>
    <title>SPARQL Query Results</title>
    <style>
        body {
            font-family: 'Star Jedi', Arial, sans-serif;
            background-color: black;
            background-image: radial-gradient(white, black 2px, transparent 2px);
            background-size: 20px 20px;
            background-repeat: repeat;
            margin: 0;
            padding: 0;
            color: #FFD700;
        }
        @font-face {
            font-family: 'Star Jedi';
            src: url('https://fonts.cdnfonts.com/s/15324/Starjedi.ttf') format('truetype');
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #FFD700;
            font-family: 'Star Jedi';
        }
        .query-form {
            margin-bottom: 20px;
        }
        .query-textarea {
            width: 100%;
            height: 300px;
            padding: 10px;
            border: 1px solid #FFD700;
            border-radius: 4px;
            font-size: 16px;
            resize: none;
            background-color: rgba(0, 0, 0, 0.5);
            color: #FFD700;
        }
        .submit-button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #FFD700;
            color: #000;
            border: none;
            border-radius: 4px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 10px;
        }
        .submit-button:hover {
            background-color: #FFC700;
        }
        .results-list {
            list-style-type: none;
            padding: 0;
        }
        .results-list li {
            background-color: rgba(255, 215, 0, 0.2);
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #FFD700;
            border-radius: 4px;
            color: #FFD700;
        }
        .results-list li span {
            font-weight: bold;
        }
        .no-results {
            text-align: center;
            color: #FFD700;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>SPARQL Query Results</h1>
        <form method="GET" action="/sparql" class="query-form">
            <textarea name="query" class="query-textarea" placeholder="Enter your SPARQL query" required>{{ request('query') }}</textarea>
            <button type="submit" class="submit-button">Search</button>
        </form>
        @if (count($results) > 0)
            <ul class="results-list">
                @foreach ($results as $result)
                    @foreach ($result as $variable => $value)
                        <li><span>{{ $variable }}:</span> {{ $value }}</li>
                    @endforeach
                @endforeach
            </ul>
        @else
            <p class="no-results">No results to display.</p>
        @endif
    </div>
</body>
</html>
