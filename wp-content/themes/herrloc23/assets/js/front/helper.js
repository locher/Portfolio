export function shuffleString(str) {
    let chars = str.split('');

    // On utilise l'algorithme de Fisher-Yates pour mélanger les caractères
    for (let i = chars.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [chars[i], chars[j]] = [chars[j], chars[i]];
    }

    return chars.join('');
}