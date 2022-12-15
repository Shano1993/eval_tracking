import { Display } from "./Display";

const addButtonProject: HTMLInputElement = document.getElementById("addButton") as HTMLInputElement;
const arrayProject: Project[] = [];

export class Project {
    public title: string = "";
    public task: string[] = [];

    public addNewProject() {
        if (addButtonProject) {
            addButtonProject.addEventListener("click", () => {
                let newDisplay = new Display();
                newDisplay.displayProject();
            })
        }
    }
}