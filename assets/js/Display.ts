import { newProject } from "./app";
import { Task } from "./Task";

const inputTitle: HTMLInputElement = document.getElementById("title") as HTMLInputElement;

export class Display {
    public displayProject() {
        const divProject: HTMLDivElement = document.createElement("div") as HTMLDivElement;
        const divTask:HTMLDivElement = document.createElement("div") as HTMLDivElement;
        const divView:HTMLDivElement = document.createElement("div") as HTMLDivElement;
        const deleteProject: HTMLElement = document.createElement("i") as HTMLElement;
        const divRight: HTMLDivElement = document.createElement("div") as HTMLDivElement;
        const divLeft: HTMLDivElement = document.createElement("div") as HTMLDivElement;
        const totalTime: HTMLElement = document.createElement("i") as HTMLElement;
        const spanLeft: HTMLSpanElement = document.createElement("span") as HTMLSpanElement;
        const dateTime: HTMLElement = document.createElement("i") as HTMLElement;
        const spanRight: HTMLSpanElement = document.createElement("span") as HTMLSpanElement;

        divRight.className = "divRightLeft";
        divLeft.className = "divRightLeft";
        spanLeft.innerHTML = "Total Time";
        totalTime.className ="fa fa-clock-o time";
        spanRight.innerHTML = "Date Time";
        dateTime.className = "fa fa-calendar time";
        divProject.className = "project";
        divTask.className = "task";
        divView.className = "divView";
        deleteProject.className = "fa fa-trash time";

        if (deleteProject) {
            deleteProject.addEventListener("click", () => {
                divProject.remove();
            })
        }

        let newTask = new Task();
        newTask.addTask(divTask);

        document.body.append(divProject);
        divProject.append(deleteProject);
        this.displayTitle(divProject);
        divProject.append(divTask);
        divProject.append(divView);
        divView.append(divRight);
        divView.append(divLeft);
        divLeft.append(totalTime);
        divLeft.append(spanLeft);
        divRight.append(dateTime);
        divRight.append(spanRight);
    }

    public displayTitle(divProject: HTMLDivElement) {
        const titleProject: HTMLHeadingElement = document.createElement("h2") as HTMLHeadingElement;
        newProject.title = inputTitle.value;
        titleProject.innerHTML = newProject.title;
        if (newProject.title == "") {
            newProject.title = "Projet sans nom";
            titleProject.innerHTML = newProject.title;
        }
        divProject.append(titleProject);
    }
}