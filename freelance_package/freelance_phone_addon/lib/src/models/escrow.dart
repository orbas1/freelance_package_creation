import 'package:equatable/equatable.dart';

class Escrow extends Equatable {
  const Escrow({
    required this.id,
    required this.amount,
    required this.currency,
    required this.status,
    this.releasedAmount = 0,
    this.pendingAmount = 0,
    this.reference,
  });

  final int id;
  final double amount;
  final String currency;
  final String status;
  final double releasedAmount;
  final double pendingAmount;
  final String? reference;

  factory Escrow.fromJson(Map<String, dynamic>? json) {
    if (json == null) {
      return const Escrow(id: 0, amount: 0, currency: 'USD', status: 'draft');
    }
    double toDouble(dynamic value) {
      if (value is num) return value.toDouble();
      return double.tryParse(value?.toString() ?? '') ?? 0;
    }

    return Escrow(
      id: json['id'] is int ? json['id'] : int.tryParse(json['id']?.toString() ?? '') ?? 0,
      amount: toDouble(json['amount']),
      currency: json['currency']?.toString() ?? 'USD',
      status: json['status']?.toString() ?? 'draft',
      releasedAmount: toDouble(json['released_amount'] ?? json['released']),
      pendingAmount: toDouble(json['pending_amount'] ?? json['pending']),
      reference: json['reference']?.toString() ?? json['reference_type']?.toString(),
    );
  }

  Map<String, dynamic> toJson() => {
        'id': id,
        'amount': amount,
        'currency': currency,
        'status': status,
        'released_amount': releasedAmount,
        'pending_amount': pendingAmount,
        'reference': reference,
      };

  @override
  List<Object?> get props => [id, amount, currency, status, releasedAmount, pendingAmount, reference];
}
