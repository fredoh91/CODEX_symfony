import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    static targets = ["form", "spinner"];

    connect() {
        // Optionnel : cacher le spinner au chargement
        if (this.hasSpinnerTarget) {
            this.spinnerTarget.style.display = 'none';
        }
    }

    showSpinner(event) {
        if (this.hasSpinnerTarget) {
            this.spinnerTarget.style.display = '';
        }
    }
} 