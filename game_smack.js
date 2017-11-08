let gold = 0;
let smacks = 0;
let amountForGold = 20;
    
function smacked() {
    smacks += 1
    document.getElementById('smacks').textContent = smacks;
    if (smacks >= amountForGold) {
        gold += 1
        amountForGold += 10
        document.getElementById("gold").textContent = gold;
        uppercutShown()
    }
function uppercutShown() {
    if (gold >= 3) {
        document.getElementById("uppercutButton").style.display = 'block';
    }
}
}
