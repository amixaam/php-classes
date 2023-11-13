// Online C++ compiler to run C++ program online
#include <iostream>
using namespace std;

class Dog {
    public:
        string name;
        Dog(string name, int age) {
            name = name;
            age = age;
        }
        void birthday() {
            age++;
        }
        void woof() {
            cout << "woof!";
        }
    private:
        int age;
};

int main() {
    Dog dog("Reksis", 6);
    dog.woof();
    
    return 0;
}