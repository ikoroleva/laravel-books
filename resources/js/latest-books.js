const loadData = async () => {

    const response = await fetch('/api/books/latest');

    const data = await response.json();

    //console.log(data);

    const container = document.getElementById('latest-books');

    data.data.forEach(book => {

        const element = makeBookElement(book);

        container.appendChild(element);

    })



}

const makeBookElement = (book_data) => {

    const element = document.createElement('div');

    element.classList.add('movie');

    console.log(book_data);

    let authors_html = '';
    book_data.authors.forEach((author, i) => {
        if (i && i < book_data.authors.length - 1) {
            authors_html += ', '
        } else if (i) {
            authors_html += ' and '
        }

        authors_html += `
            <span class="movie__author">${author.name}</span>
        `
    })



    element.innerHTML = `
        <a href ="/books/${book_data.id}">
        <h3 class="movie__title">${book_data.title} by ${authors_html}</h3>
        <div class="movie__image">
            <img src="${book_data.image}" alt="book cover">
        </div>
    `;

    return element;
}

loadData();