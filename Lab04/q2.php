<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab04</title>
</head>

<body>
    <div id="wrapper"></div>

    <script>

        // function firstQuestion() {
        //     window.onload = function () {
        //         var agents = [
        //             "Tham Mun Fatt",
        //             "Tan Chin Tiong",
        //             "Apple Tiong",
        //             "Tiong Na Na",
        //             "Sam Sung"
        //         ];

        //         var wrapper = document.getElementById('wrapper');

        //         var ul = document.createElement('ul');

        //         for (agent of agents) {
        //             var li = document.createElement('li');
        //             li.textContent = agent;

        //             ul.appendChild(li);
        //         }

        //         wrapper.appendChild(ul);
        //     }
        // }

        function firstQuestion() {
            var agents = [
                "Tham Mun Fatt",
                "Tan Chin Tiong",
                "Apple Tiong",
                "Tiong Na Na",
                "Sam Sung"
            ];

            let wrapper = document.getElementById('wrapper');

            // Clear the wrapper content
            wrapper.innerHTML = '<h2> Question 1 </h2>';

            let ul = document.createElement('ul');

            for (let agent of agents) {
                let li = document.createElement('li');
                li.textContent = agent;

                ul.appendChild(li);
            }

            wrapper.appendChild(ul);
        }

        function secondQuestion() {
            let wrapper = document.getElementById('wrapper');

            wrapper.innerHTML = '<h2> Question 2 </h2>';

            let ol = document.createElement('ol');

            var properties = [
                {
                    unitNo: "C-8-1",
                    owner: "Foo Yoke Wai"
                },
                {
                    unitNo: "C-3A-3A",
                    owner: "Chia Kim Hooi"
                },
                {
                    unitNo: "B-18-8",
                    owner: "Heng Tee See"
                },
                {
                    unitNo: "A-10-10",
                    owner: "Tang So Ny"
                },
                {
                    unitNo: "B-19-10",
                    owner: "Tang Xiao Mi"
                },
            ];

            for (property of properties) {

                let li = document.createElement('li');

                li.textContent = property.unitNo + ': ' + property.owner;

                ol.appendChild(li);

            }

            wrapper.appendChild(ol);
        }

        function thirdQuestion() {

            var newAgents = [
                "Sim Su Yi",
                "Teh Seok Leng",
                "Lau Li Ting"
            ];

            let wrapper = document.getElementById('wrapper');

            if (!wrapper.hasChildNodes()) {
                wrapper.innerHTML = '<h2> Please Run Question 1 First </h2>'
                return;
            }

            let ul = wrapper.querySelector('ul');

            for (agent of newAgents) {

                let li = document.createElement('li');

                li.textContent = agent;

                ul.appendChild(li);
            }

        }

        function forthQuestion() {

            var newAgents = [
                "Sim Su Yi",
                "Teh Seok Leng",
                "Lau Li Ting"
            ];

            let wrapper = document.getElementById('wrapper');

            if (!wrapper.hasChildNodes()) {
                wrapper.innerHTML = '<h2> Please Run Question 1 First </h2>'
                return;
            }

            let ul = wrapper.querySelector('ul');

            for (agent of newAgents) {

                let li = document.createElement('li');

                li.textContent = agent;

                ul.insertBefore(li, ul.firstChild);
            }

        }

        function fifthQuestion() {
            let wrapper = document.getElementById('wrapper');
            let ul = document.createElement('ul');

            if (!wrapper.hasChildNodes()) {
                wrapper.innerHTML = '<h2> Please Run Question 1 First </h2>'
                return;
            }

            var freshAgents = [
                "Tiong Chui Li",
                "Tiong Chui Lin",
                "Tiong Chin Chin",
                "Foo Yoke Kai",
                "Foo Yoke Wai"
            ];

            clearResult();
            wrapper.innerHTML = '<h2> Question 5 </h2>';

            for (freshAgent of freshAgents) {
                let li = document.createElement('li');

                li.textContent = freshAgent;

                ul.appendChild(li);
            }

            wrapper.appendChild(ul);
        }

        function clearResult() {
            let wrapper = document.getElementById('wrapper');

            wrapper.innerHTML = '';
        }

    </script>

    <button onclick="firstQuestion()">First Question</button> <br>
    <button onclick="secondQuestion()">Second Question</button> <br>
    <button onclick="thirdQuestion()">Third Question</button> <br>
    <button onclick="forthQuestion()">Forth Question</button> <br>
    <button onclick="fifthQuestion()">Fifth Question</button> <br><br>
    <button onclick="clearResult()">Clear All</button>
</body>

</html>