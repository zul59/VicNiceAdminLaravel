(function() {

    const unitContainer = document.getElementById('unitContainer');

    getData();

    async function getData() {
        try {
            const path = 'https://nice-admin1.herokuapp.com/adminUnit';
            const response = await fetch(path, {
                headers: {'Content-Type': 'application/json'},
                method: 'GET',
            })
            const result = await response.json();

            const units = result.data.units;
            
            units.forEach((unit, index) => {
                const aLink = document.createElement('a');
                aLink.classList.add("link_selection");

                aLink.innerHTML = `${index+1}. ${unit.unit_name} <br /> <br />`;

                unitContainer.append(aLink);
            })

            const linkButtons = document.querySelectorAll('.link_selection');
    
            linkButtons.forEach(link => {
                link.addEventListener('click', function() {
                    const text = link.textContent.split('. ')[1];
                    location.href = 'Tambah Data Risiko.html' + `?unit=${encodeURIComponent(text)}`;
                })
            })

            if (result.status !== 200) 
                throw new Error(result.message);
        } catch (ex) {
            alert(ex);
        }
    }
 })();