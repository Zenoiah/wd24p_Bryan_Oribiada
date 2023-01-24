function QueuRegular (props) {
    return (
        <div>
            <button type="button" className={props.customizedStyle} 
            onClick={props.onClick}>{props.name}</button>
        </div>
    );
};

export default QueuRegular;