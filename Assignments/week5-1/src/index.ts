interface ICustomer {
    id: string;
    name: string;
    username: string;
    email: string;
    address: string;
    phone: string;
    website: string;
    company: string;
    avatar: string;
}

export class Main{
    constructor(){
        const button = document.getElementById("populate") as HTMLButtonElement;
        button.onclick = () => this.populateData();
        //button.onclick = () => 
        // button.addEventListener("click", function(/*Element: HTMLButtonElement, e: MouseEvent*/) => {
        //     this.populateData();
        // }.bind(this))
    }

    public async populateData(){
        let tableBody = document.getElementById("table-body");
        let url = "https://cs4350.herokuapp.com/demo/all";
        let customerData = await this.loadData(url);
        tableBody.innerHTML =  this.createHtmlFromArray(customerData);
        console.log("populate data");
    }

    public async loadData(url: string): Promise<ICustomer[]>{
        const response = await fetch(url);
        const json = await response.json();
        return json as ICustomer[];
        // return fetch(url).then(Response => {
        //     return Response.json();
        // })
    }

    public createHtmlFromArray(dataArray: ICustomer[]):string{
        let listHtml = "";
        let template = document.getElementById("table-template");
        let templateHtml = template.innerHTML;

        for (let index = 0; index < dataArray.length; index++) {
            listHtml += templateHtml
                                    .replace(/{{id}}/g, dataArray[index].id)
                                    .replace(/{{name}}/g, dataArray[index].name)
                                    .replace(/{{username}}/g, dataArray[index].username)
                                    .replace(/{{email}}/g, dataArray[index].email)
                                    .replace(/{{address}}/g, dataArray[index].address)
                                    .replace(/{{phone}}/g, dataArray[index].phone)
                                    .replace(/{{website}}/g, dataArray[index].website)
                                    .replace(/{{company}}/g, dataArray[index].company)
                                    .replace(/{{avatar}}/g, dataArray[index].avatar)
        }
        return listHtml;
    }
}
new Main ();