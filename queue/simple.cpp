#include <iostream>
using namespace std;

/* 
insertion takes place from one end while the deletion
occurs from another end.
*/


/*
struct allows a user to combine data items of (possibly)
different data types under a single name.
*/
struct SimpleQueue {
    int front, rear, capacity;
    int* queue;
    
    SimpleQueue(int c){  // constructor
        front = rear = 0;
        capacity = c;
        queue = new int[capacity];
    }

    ~SimpleQueue() { delete[] queue; }

    void Enqueue(int data){  // insert
        if(capacity == rear){ // full or not
            cout << "\nQueue is full\n";
        }else{ // insert at the rear
            queue[rear] = data;
            rear++;
            cout << "Inserted : " << data << endl;
        }
    }

    int Dequeue(){  // remove
        if(front == rear){ // empty or not
            cout << "\nQueue is empty\n";
            return -1;
        }else{
            int data = queue[front];
            front++;
            return data;
        }
    }

    void Peek(){ // get front
        if(front == rear){ // if yes, empty
            cout << "\nQueue is Empty\n";
        }else{ // if no, get front
            cout << "Front : " << queue[front];
        }
    }

    int Size(){  // get size
        return rear - front;
    }

    int isEmpty(){ // check empty
        if(front == rear){
            return -1;
        }else{
            return 1;
        }
    }

    void Display(){ // display the queue
        if(front == rear){
            cout << "\nQueue is Empty\n";
        }else{
            for(int i=front; i<rear; i++){
                cout << " <-- " << queue[i];
            }
        }
    }

};

int main(){

    SimpleQueue q(4);

    q.Display();

    q.Enqueue(20);
    q.Enqueue(30);
    q.Enqueue(40);
    q.Enqueue(50);

    q.Display();

    q.Enqueue(60);

    q.Display();

    cout << "\nRemove : " << q.Dequeue() << endl;
    cout << "\nRemove : " << q.Dequeue() << endl;

    q.Display();

    cout << "\nSize : " << q.Size() << endl;

    q.Peek();

    return 0;
}