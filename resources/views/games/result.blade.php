<x-app-layout>
    <x-slot name="header">
        <p>Quiz Final</p>
    </x-slot>
    <div class="swipeCardPrincipal">
       @if ($nboui > 5)
       Vous faites partie des personnes qui contribuent encore au sexisme en France, mais rien n’est perdu encore, l’objectif
        de cette auto-évaluation est de vous faire prendre conscience de l’impact de votre communication sexiste. Il est temps de
        changer dès à présent! Consultez point par point le mode d’emploi afin de mieux comprendre l’importance de véhiculer une
        communication non sexiste et d’apprendre à vous poser les bonnes questions.
        @elseif ($nboui > 1 && $nboui < 6)
        Des progrès s’imposent, mais le sexisme est tellement ancré dans les usages et le langage qu’il est facile de déraper!
        Analysez attentivement les messages et les images utilisés dans votre communication, puis réenvisagez vos objectifs et
        vos cibles en vous aidant de l’ensemble du kit de communication non sexiste. Vous allez certainement voir les choses
        autrement…

        @elseif ($nboui == 1)
        Votre communication n’est pas exempte de stéréotype de sexe. Courage, le but est proche… Un « OUI » de moins, et votre
        communication sera progressiste ! Faites un tour dans le document « Check-list: pour aller plus loin » pour voir comment
        vous auriez pu améliorer votre score et éviter ce OUI si décevant.
        @elseif($nboui == 0)
        Bravo ! Vous êtes attentif.ve à l’information que vous véhiculez au travers de votre communication. Non seulement le résultat
        ne véhicule pas de représentations dégradantes ou stigmatisantes, mais vous contribuez également à promouvoir l’égalité
        entre les femmes et les hommes dans la société par une communication juste et non sexiste.
        @endif
       @endif
    </div>
</x-app-layout>

<style>

</style>
