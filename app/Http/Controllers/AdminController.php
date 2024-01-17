#include <iostream>
#include <iomanip>
#include <string>
using namespace std;

struct Pakaian {
    string kodePaket;
    string namaPakaian;
    string kodeUkuran;
    int jumlahSewa;
    int harga = 0;
};

struct Penyewa {
    string nama;
    string lama_sewa;
    int jumlah_data;
    Pakaian pakaian[3];
    int jumlahPakaian;
};

int main() {
    int pilihan;
    string chonioBanner = "=============\n"
                          "CHONIO BOUTIQUE\n"
                          "=============\n"
                          "Pilihan Menu :\n"
                          "1. Input Data\n"
                          "2. Log Out\n"
                          "Inputkan Pilihan Anda : ";

    while (true) {
        system("clear"); 
        cout << chonioBanner;
        cin >> pilihan;
    if (pilihan == 1) {
            Penyewa penyewa[2];

    cout << "SELAMAT DATANG DI CHONIO BOUTIQUE" << endl;
    cout << "NAMA PENYEWA : ";
    cin >> penyewa[0].nama;
    cout << "INPUT LAMA SEWA : ";
    cin >> penyewa[0].lama_sewa;
    cout << "INPUT JUMLAH DATA : ";
    cin >> penyewa[0].jumlah_data;
    cout << "***" << endl;

    penyewa[0].jumlahPakaian = penyewa[0].jumlah_data;

    for (int i = 0; i < penyewa[0].jumlahPakaian; i++) {
        cout << "DATA KE-" << i + 1 << endl;
        cout << "INPUT KODE PAKET BAJU [JB/JT/SB] : ";
        cin >> penyewa[0].pakaian[i].kodePaket;
        cout << "INPUT KODE UKURAN BAJU [S/M/L] : ";
        cin >> penyewa[0].pakaian[i].kodeUkuran;
        cout << "JUMLAH SEWA : ";
        cin >> penyewa[0].pakaian[i].jumlahSewa;
        cout << "=============================" << endl;
    }

    int totalBayar = 0;
    int uangBayar, uangKembali, subtotal;
    char jawab;

    for (int i = 0; i < penyewa[0].jumlahPakaian; i++) {
            if (penyewa[0].pakaian[i].kodeUkuran == "S") {
                subtotal += 200000 * penyewa[0].pakaian[i].jumlahSewa;
            } else if (penyewa[0].pakaian[i].kodeUkuran == "M") {
                subtotal += 255888 * penyewa[0].pakaian[i].jumlahSewa;
            } else if (penyewa[0].pakaian[i].kodeUkuran == "L") {
                subtotal += 300000 * penyewa[0].pakaian[i].jumlahSewa;
            }

            if (penyewa[0].pakaian[i].kodeUkuran == "S") {
                penyewa[0].pakaian[i].harga += 200000;
            } else if (penyewa[0].pakaian[i].kodeUkuran == "M") {
                penyewa[0].pakaian[i].harga += 255888;
            } else if (penyewa[0].pakaian[i].kodeUkuran == "L") {
                penyewa[0].pakaian[i].harga += 300000;
            }

            if (penyewa[0].pakaian[i].kodePaket == "JB") {
                penyewa[0].pakaian[i].namaPakaian = "Jawa Barat";
            } else if (penyewa[0].pakaian[i].kodePaket == "JT") {
                penyewa[0].pakaian[i].namaPakaian = "Jawa Timur";
            } else if (penyewa[0].pakaian[i].kodePaket == "SB") {
                penyewa[0].pakaian[i].namaPakaian = "Sumatera Barat";
            }
    }

    do {
        cout << "DATA BAJU YANG DISEWA" << endl;
        cout << "No.\t" << setw(15) << "Nama Paket" << setw(15) << "Harga" << setw(15) << "Kode Ukuran" << setw(15) << "Jumlah Sewa" << setw(15) << "Sub Total" << endl;

        for (int i = 0; i < penyewa[0].jumlahPakaian; i++) {
            cout << i + 1 << "\t" << setw(15) << penyewa[0].pakaian[i].namaPakaian << setw(15) << penyewa[0].pakaian[i].harga << setw(15)
                 << penyewa[0].pakaian[i].kodeUkuran << setw(15) << penyewa[0].pakaian[i].jumlahSewa << setw(15) << subtotal << endl;
        }

        cout << "=============================" << endl;

        // Calculate totalBayar
        for (int i = 0; i < penyewa[0].jumlahPakaian; i++) {
            totalBayar += penyewa[0].pakaian[i].jumlahSewa;
        }

        // Output totalBayar
        cout << "TOTAL BAYAR\t: Rp. " << subtotal << endl;
        cout << "UANG BAYAR\t: Rp. ";
        cin >> uangBayar;
        uangKembali = uangBayar - subtotal;
        cout << "UANG KEMBALI\t: Rp. " << uangKembali << endl;

        // Input for adding more data
        cout << "INPUT DATA LAGI [Y/T] ";
        cin >> jawab;

    } while (jawab == 'Y' || jawab == 'y');
        } else if (pilihan == 2) {
            cout << "Terima kasih telah menggunakan layanan kami!" << endl;
            break;
        } else {
            cout << "Pilihan tidak valid, silakan coba lagi." << endl;
            system("pause");
        }

    return 0;
}
}
