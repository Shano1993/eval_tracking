export class Task {
    public addTask(divTask: HTMLDivElement) {
        const addTaskLink: HTMLAnchorElement = document.createElement("a") as HTMLAnchorElement;
        addTaskLink.innerHTML = "+ ajouter une tâche";
        addTaskLink.className = "newTask";
        addTaskLink.style.textAlign = "right";
        addTaskLink.addEventListener("click", () => {
            addTaskLink.style.display = "none";
            const divTaskValidate: HTMLDivElement = document.createElement("div") as HTMLDivElement;
            const inputTask: HTMLInputElement = document.createElement("input") as HTMLInputElement;
            const validateTask: HTMLInputElement = document.createElement("input") as HTMLInputElement;
            const returnTask: HTMLInputElement = document.createElement("input") as HTMLInputElement;

            divTaskValidate.className = "divTask";
            validateTask.type = "submit";
            validateTask.value = "Ajouter";
            returnTask.type = "submit";
            returnTask.value = "Annuler";

            validateTask.addEventListener("click", () => {
                const divTimerTask: HTMLDivElement = document.createElement("div") as HTMLDivElement;
                const divDeleteTimer: HTMLDivElement = document.createElement("div") as HTMLDivElement;
                const paraTask: HTMLParagraphElement = document.createElement("p") as HTMLParagraphElement;
                const deleteTask: HTMLElement = document.createElement("i") as HTMLElement;
                const timer = document.createElement("i");
                paraTask.className = "paraTask";
                deleteTask.className = "fa fa-minus-square deleteTask";
                timer.className = "fa fa-cc-visa timer";
                divTimerTask.className = "divTimerTask";
                divDeleteTimer.className = "deleteTimer";
                if (inputTask.value != "") {
                    paraTask.innerHTML = "- " + inputTask.value;
                    divTimerTask.append(paraTask);
                    divTimerTask.append(divDeleteTimer);
                    divDeleteTimer.append(deleteTask);
                    divDeleteTimer.append(timer);
                    divTask.append(divTimerTask);
                }

                if (deleteTask) {
                    deleteTask.addEventListener("click", () => {
                        divTimerTask.remove();
                    })
                }
            })

            returnTask.addEventListener("click", () => {
                divTaskValidate.style.display = "none";
                inputTask.style.display = "none";
                validateTask.style.display = "none";
                returnTask.style.display = "none";
                addTaskLink.style.display = "initial";
            })

            divTask.prepend(divTaskValidate);
            divTaskValidate.append(inputTask);
            divTaskValidate.append(validateTask);
            divTaskValidate.append(returnTask);
        })
        divTask.append(addTaskLink);
    }
}
