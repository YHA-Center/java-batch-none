#include <iostream>
using namespace std;
#define SIZE 5

class Queue {
    private:
        int arr[SIZE], front, rear;
    
    public:
        Queue(){
            front = -1;
            rear = -1;
        }

        bool isFull(){
            if(front == 0 && rear == SIZE - 1){
                return true;
            }else{
                return false;
            }
        }

        bool isEmpty(){
            if(front == -1){
                return true;
            }else{
                return false;
            }
        }

        void Enqueue(int element){
            if(isFull()){
                cout << "Queue is Full.\n";
            }else{
                if(front == -1) front++;
                rear++;
                arr[rear] = element;
                cout << "Inserted -> " << element << " to the queue.\n";
            }
        }

        int Dequeue(){
            int element;
            if(isEmpty()){
                cout << "Queue is empty!\n";
            }else{
                element = arr[front];
                if(front >= rear){  // reset the queue
                    front = -1;
                    rear = -1;
                }else{
                    front++;
                }
                cout << "Deleted -> " << element << " from the queue.\n";
            }
        }

        void display(){
            if(isEmpty()){
                cout << "Queue is empty!\n";
            }else{
                for(int i=front; i<=rear; i++){
                    cout << "<-" << arr[i] ;
                }
                cout << endl;
            }
        }
};

int main(){

    Queue q;

    q.Dequeue();

    q.Enqueue(3);
    q.Enqueue(9);
    q.Enqueue(1);
    q.Enqueue(4);
    q.Enqueue(14);

    q.Enqueue(34);

    // before dequeue
    q.display(); 

    q.Dequeue();

    // after dequeue
    q.display();

    // dequeue all element
    q.Dequeue();
    q.Dequeue();
    q.Dequeue();
    q.Dequeue();

    q.Dequeue();

    q.display();


    return 0;
}