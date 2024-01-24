#include <iostream>
using namespace std;

const int MAX_SIZE = 5;

class Stack {
    private:
        int arr[MAX_SIZE];
        int top;

    public:
        Stack(){
            top = -1;
        }

        bool isEmpty(){ // check stack is empty
            return (top == -1);
        }

        bool isFull(){ // check stack is full
            return (top == MAX_SIZE - 1);
        }

        int push(int element){ // insert item into stack
            if(!isFull()){
                top++;
                arr[top] = element;
                return arr[top];
            }else{
                return -1;
            }
        }
        
        int pop(){ // remove item from stack
            if(!isEmpty()){
                int poppedElement = arr[top];
                top--;
                return poppedElement;
            }else{
                return -1;
            }
        }

        int peek(){ // get top item from stack
            if(!isEmpty()){
                return arr[top];
            }else{
                return -1;
            }
        }

        int size(){  // get size of stack
            return top + 1;
        }

};

int main(){
    // create instance of stack
    Stack stack1;

    if(stack1.peek() == -1) 
        cout << "Stack is Empty" << endl;
    else 
        cout << "Top element: " << stack1.peek() << endl;

    cout << "Inserting: " << stack1.push(1) << endl ;
    cout << "Inserting: " << stack1.push(2) << endl ;

    cout << "Removing: " << stack1.pop() << endl ;
    cout << "Removing: " << stack1.pop() << endl ;

    cout << "Inserting: " << stack1.push(3) << endl ;

    if(stack1.peek() == -1) 
        cout << "Stack is Empty" << endl;
    else 
        cout << "Top element: " << stack1.peek() << endl;

    cout << "Size: " << stack1.size() << endl;

    cout << "Removing: " << stack1.pop() << endl;
    
    return 0;
}