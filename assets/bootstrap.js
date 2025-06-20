import { startStimulusApp } from '@symfony/stimulus-bridge';
import RechercheLaboSpinnerController from './controllers/recherche_labo_spinner_controller.js';

const app = startStimulusApp();
// register any custom, 3rd party controllers here
// app.register('some_controller_name', SomeImportedController);
app.register('recherche-labo-spinner', RechercheLaboSpinnerController);
