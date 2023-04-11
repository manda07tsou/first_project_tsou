import { themeSwitcher } from "./themeSwitcher.js";
import "./header.js";
import "./gallery.js";
import { Dropdown } from "./dropdown.js";

customElements.define('theme-switcher', themeSwitcher);
customElements.define('drop-down', Dropdown);
