function expandCard(clickedCard) {
    let allCards = document.querySelectorAll('.card');

    allCards.forEach(card => {
        if (card !== clickedCard) {
            card.classList.remove('expanded');
        }
    });

    clickedCard.classList.toggle('expanded');
}