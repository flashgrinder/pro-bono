function searchSurnameTable() {

    const searchSurname = document.getElementById('searchSurname');
    if (searchSurname) {
        searchSurname.addEventListener('input', function (e) {
            const query = e.target.value.trim().toLowerCase();
            const table = document.getElementById('nominationsTable');
            const rows = table.querySelectorAll('.nominations__table-item');
            const noResultsEl = document.getElementById('noResultsMessage');

            let visibleCount = 0;

            rows.forEach(row => {
                const nameElement = row.querySelector('.nominations__table-item-name');
                if (!nameElement) {
                    row.style.display = 'none';
                    return;
                }

                const fullName = nameElement.textContent.trim();
                const surname = fullName.split(' ')[0] || '';

                if (query === '' || surname.toLowerCase().includes(query)) {
                    row.style.display = ''; // показать
                    visibleCount++;
                } else {
                    row.style.display = 'none'; // скрыть
                }
            });

            // Показать или скрыть сообщение
            if (visibleCount === 0 && query !== '') {
                noResultsEl.style.display = 'block';
            } else {
                noResultsEl.style.display = 'none';
            }
        });
    }

}

export default searchSurnameTable;