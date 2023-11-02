<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div id="card">
        <div id="top_card"  class="bot_top_card size_test">
            <div id="name"  class="size_test">
                <h1>{{ __('Te amo') }} {{$name}} </h1>
            </div>
        </div>
        <div id="bot_card"  class="bot_top_card size_test">
            <div id="info_card"  class="">
                <p>
                    {{__('Naturally, study of cross-platform practices ensures integrity of The Action of Asymmetric Analysis (Abel Cooney in The Book of the Matters of Peculiar Interest)
                    Let\'s not forget that the core principles provides a glimpse at the preliminary action plan.
                    One way or another, the point of the application rules results in a complete compliance with the change of marketing strategy. Thus a complete understanding is missing.
                    Resulting from review or analysis of threats and opportunities, we can presume that final stages of the final draft commits resources to the consequential risks. ')}}
                </p>
            </div>
            <div id="photo"  class="">
                @
            </div>
        </div>
    </div>
</body>
</html>

