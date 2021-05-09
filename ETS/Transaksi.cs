using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace ETS
{
    public partial class Transaksi : Form
    {
        public static int total = 0;

        public Transaksi()
        {
            InitializeComponent();
        }

        private void Transaksi_Load(object sender, EventArgs e)
        {
            // TODO: This line of code loads data into the 'etsposDataSet.Barang' table. You can move, or remove it, as needed.
            this.barangTableAdapter.Fill(this.etsposDataSet.Barang);

        }

        private void button1_Click(object sender, EventArgs e)
        {
            int a, b;
            a = int.Parse(this.label9.Text); 
            b = int.Parse(this.textBox1.Text);

            total += (a * b);
            this.label12.Text = total.ToString();
        }

        private void label12_Click(object sender, EventArgs e)
        {
            
        }

        private void comboBox2_SelectedIndexChanged(object sender, EventArgs e)
        {

        }

        private void label9_Click(object sender, EventArgs e)
        {

        }

        private void button2_Click(object sender, EventArgs e)
        {
            Laporan r = new Laporan();
            this.Hide();
            r.Show();
        }

        private void label5_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }
    }
}
