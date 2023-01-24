
import React, { Component } from "react";
import Blink from 'react-blink-text';
import QueuRegular from "./component/QueuRegular";
import { useCallback, useState, useEffect } from "react";
import DataTable from 'react-data-table-component';
import axios from "axios";
import { render } from "@testing-library/react";



const laravelController = "users";

function QueuMain() {

    let [counter, setCounter] = useState(0);
    let [counter1, setCounter1] = useState(0);
    let [counter2, setCounter2] = useState(0); 
    let [counter3, setCounter3] = useState(0);
    let [counter4, setCounter4] = useState(0);
    let [totalserve1, setCounter7] = useState(-1);
    let [totalserve2, setCounter8] = useState(0);
    let [totalserve3, setCounter9] = useState(-1);
    let [total, setTotal] = useState (0);
    


    const handleButton1 = useCallback(() => {
        setCounter(counter++);
        
    }, []);

    const handleButton2 = useCallback(() => {
        setCounter1(counter1+++counter2);
        setCounter7(totalserve1++);
        
    }, []);

    const handleButton3 = useCallback(() => {
        setCounter2(counter2+++counter1);
        setCounter8(totalserve2++);
      
    }, []);

    const handleButton4 = useCallback(() => {
        setCounter3(counter3++);
        setCounter9(totalserve3++);
       
    }, []);

    const handleButton5 = useCallback(() => {
        setCounter4(counter4++);
    }, []);

    const handleButton6= useCallback(() => {
        setTotal(totalserve1 + totalserve2 + totalserve3);
    }, []);
 

    return (
        <div className="row p-3">
            <div className="d-grid gap-1 col-4">

                <button className="btn btn-secondary btn-lg"> <QueuRegular name='REGULAR' onClick={handleButton1} /></button>
                <div className="card text-center">
                    <div className="card-body text-bg-warning"><br />
                        <p className="card-title textlet">This is your Queue Number</p><br />
                        <h1 className="card-subtitle mb-5 textnum">{counter}</h1>
                        <p className="card-text textlet"><strong>Please wait on your Queue to be called on Counter 1 / Counter 2</strong></p>
                    </div>
                </div> <br />

                <button className="btn btn-secondary btn-lg"> <QueuRegular name='SENIOR / PWD' onClick={handleButton5} /></button>
                <div className="card text-center">
                    <div className="card-body text-bg-warning"><br />
                        <p className="card-title textlet">This is your Queue Number</p><br />
                        <h1 className="card-subtitle mb-5 textnum">S/P {counter4}</h1>
                        <p className="card-text textlet"><strong>Please wait on your Queue to be called on Senior / PWD Counter </strong> </p>
                    </div>
                </div>

            </div>

            <div className="col-2">
                <div className="card text-bg-danger mb-2  text-center">
                    <div className="card-body">
                        <h6 className="card-title">COUNTER 1</h6>
                    </div>
                </div>
                <div className="card text-bg-warning mb-3  text-center">
                    <div className="card-body">
                        <h6 className="card-title">Now Serving</h6>
                        <h1 className="textcount"><Blink color='black' text={counter1} ></Blink></h1>
                        <p className="card-text">Please proceed to the counter</p>
                    </div>
                </div>
                <div className="card text-bg-secondary mb-1  text-center">
                    <div className="card-body">
                        <button className="btn btn-secondary" onClick={handleButton2}>Next</button>
                    </div>
                </div>
                <div className="card text-bg-dark">
                    <div className="card-body">
                        <p className="card-text">TOTAL SERVED:  {totalserve1}</p>
                    </div>
                </div>
            </div>

            <div className="col-2">
                <div className="card text-bg-danger mb-2  text-center">
                    <div className="card-body">
                        <h6 className="card-title">COUNTER 2</h6>
                    </div>
                </div>
                <div className="card text-bg-warning mb-3 text-center">
                    <div className="card-body">
                        <h6 className="card-title">Now Serving</h6>
                        <h1 className="textcount"><Blink color='black' text={counter2}></Blink></h1>
                        <p className="card-text">Please proceed to the counter</p>
                    </div>
                </div>
                <div className="card text-bg-secondary mb-1  text-center">
                    <div className="card-body">
                        <button className="btn btn-secondary" onClick={handleButton3}>Next</button>
                    </div>
                </div>
                <div className="card text-bg-dark">
                    <div className="card-body">
                        <p className="card-text" >TOTAL SERVED: {totalserve2} </p>
                    </div>
                </div>
            </div>

            <div className="col-2">
                <div className="card text-bg-danger mb-2  text-center">
                    <div className="card-body">
                        <h6 className="card-title">SENIOR / PWD</h6>
                    </div>
                </div>
                <div className="card text-bg-warning mb-3  text-center">
                    <div className="card-body">
                        <h6 className="card-title">Now Serving</h6>
                        <h1 className="textcount"><Blink color='black' text={counter3}></Blink></h1>
                        <p className="card-text">Please proceed to the counter</p>
                    </div>
                </div>
                <div className="card text-bg-secondary mb-1  text-center">
                    <div className="card-body">
                        <button className="btn btn-secondary" onClick={handleButton4}>Next</button>
                    </div>
                </div>
                <div className="card text-bg-dark">
                    <div className="card-body">
                        <p className="card-text">TOTAL SERVED: {totalserve3}</p>
                    </div>
                </div>
             <br/><br/>

             <div className="card text bg-success text-center">
                    <div className="card-body">
                        <button className="card-text bg-warning " onClick={handleButton6} >ALL TOTAL SERVED: {total} </button>
                    </div>
                </div>
   
                <br /><br />
            </div>

            <marquee width="50%" direction="left" height="40%"><b>
                Welcome to My Queueing Sytem. Please Wait your Queu Number to be display on Screen and go to your designated counter. Thank you!</b>
            </marquee>

        </div>


    );
};

export default QueuMain; 