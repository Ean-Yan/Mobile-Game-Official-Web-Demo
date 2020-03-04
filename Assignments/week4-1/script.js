"use strict";


(
    function()
    {
        let x = 1;

        if(x === 1)
        {
            let x=2;
            console.log("inside scope");
            console.log(`x = ${x}`);
        }
        console.log("outside scope");
        console.log(`x = ${x}`);

        var y = 1;
        if(y===1){
            var y = 2;
            console.log("inside scope");
            console.log(`y = ${y}`);
        }
        console.log("outside scope");
        console.log(`y = ${y}`);

        const z = 0;

        console.debug(`adasdasdas`);
        console.error(`sdsdasda`);

        try{
            z=3
        }catch(error){
            console.log(error);
        }

        console.log("false =='false':", false =='false');
        console.log("false ==='false':", false ==='false');

        console.log("false =='0':", false =='0');
        console.log("false ==='0':", false ==='0');

        console.log("' \\t\\r\\n ' ==0:" , '\t\r\n ' == 0);
        console.log("' \\t\\r\\n ' ===0:" , ' \t\r\n ' === 0);

        console.log(z.toString());

        let array = [1,2,3,4,5,6,7,8,9,10];
        // for (let index = 0; index < array.length; index++) {
        //     const element = array[index];
        //     console.log(element);
        // }
        array.forEach(function(value,index)
        {
            console.log("inside forEach loop. value: ",value, "at index: ",index);
        });
    }

)();