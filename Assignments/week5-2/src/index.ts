export class Main{
    private canvas: HTMLCanvasElement;
    private ctx: CanvasRenderingContext2D;
    private flag = false;
    private previousX = 0;
    private currentX = 0;
    private previousY = 0;
    private currentY = 0;
    private dotFlag = false;
    private fillColor = "black";
    private stroke = 2;
    private width: number;
    private height: number;

    constructor(){
        this.canvas = document.getElementById("canvas")as HTMLCanvasElement;
        this.ctx = this.canvas.getContext("2d");
        this.width = this.canvas.width;
        this.height = this.canvas.height;

        this.canvas.addEventListener("mousemove",(e: MouseEvent) =>{
            this.findxy("move",e);
        });
    }

    public color(color:string): void{
        this.fillColor = color;
        if(this.fillColor === "white"){
            this.stroke = 20;
        }else{
            this.stroke = 2;
        }
    }

    public draw(){
        this.ctx.beginPath();
        this.ctx.moveTo(this.previousX,this.previousY);
        this.ctx.lineTo(this.currentX, this.currentY);
        this.ctx.strokeStyle = this.fillColor;
        this.ctx.lineWidth = this.stroke;
        this.ctx.stroke();
        this.ctx.closePath();
    }

    public clear(): void{
        const doesWantToClear = confirm("Are you sure you want to clear?");
        if(doesWantToClear){
            this.ctx.clearRect(0,0,this.width,this.height);
            document.getElementById("canvasimg").style.display = "none";
        }
    }

    public save(): void{
        const img = document.getElementById("canvasimg") as HTMLImageElement;
        img.style.border = "2px solid";
        const dataUrl = this.canvas.toDataURL();
        img.src = dataUrl;
        img.style.display = "inline";
    }

    public findxy(eventType: string, e: MouseEvent): void{
        console.log(eventType);
        if(eventType === "down"){
            
        }

        if(eventType === "up"|| eventType === "out"){
            
        }

        if(eventType === "move"){

        }
    }
}
new Main();